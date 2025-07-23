export default async function handler(req, res) {
  const { phone, otp, ref, dev } = req.query;

  if (!phone || !otp || !dev) {
    return res.status(400).json({ error: "Missing parameters" });
  }

  const query = `
    query {
      verifyOTP(
        mobile_number: { country_code: "91", number: "${phone}" },
        OTP: "${otp}",
        user_type: 0
      ) {
        data {
          is_registered
          user_data {
            _id
            email
            token
            mobile_number {
              country_code
              number
            }
          }
        }
        status
        error
        httpStatusCode
      }
    }
  `;

  const headers = {
    "Content-Type": "application/json",
    "x-api-key": "saPWEAUkwbiStkiygODZqTDFPmsVAHC8J8S0+rRseHA=",
    "x-country-code": "IN",
    "x-device-country-code": "IN",
    "x-user-platform": "android",
    "device-id": dev,
    accept: "application/json, text/plain, */*",
    "user-agent": "okhttp/4.9.2",
  };

  try {
    const response = await fetch("https://api.myjobee.com/user/token?appVersion=1.45.1", {
      method: "POST",
      headers,
      body: JSON.stringify({ query, variables: {} }),
    });

    const json = await response.json();
    const result = json?.data?.verifyOTP;

    if (result?.httpStatusCode === 200) {
      const token = result.data.user_data.token;
      const userId = result.data.user_data._id;

      return res.status(200).json({
        status: "success",
        message: "OTP Verified",
        token,
        user_id: userId,
        is_registered: result.data.is_registered,
        next_step: "/api/create-profile", // you can build this next
      });
    } else {
      return res.status(400).json({
        status: "error",
        message: result?.error || "Verification failed",
      });
    }
  } catch (err) {
    return res.status(500).json({ error: "Server error", details: err.message });
  }
}

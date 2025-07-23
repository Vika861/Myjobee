export default async function handler(req, res) {
  const { phone } = req.query;

  if (!phone) {
    return res.status(400).json({ error: "Phone number is required" });
  }

  const dev = generateRandomString(32);

  const headers = {
    'Host': 'api.myjobee.com',
    'accept': 'application/json, text/plain, */*',
    'device-id': dev,
    'x-api-key': 'saPWEAUkwbiStkiygODZqTDFPmsVAHC8J8S0+rRseHA=',
    'x-country-code': 'IN',
    'x-device-country-code': 'IN',
    'x-user-platform': 'android',
    'content-type': 'application/json',
    'accept-encoding': 'gzip',
    'user-agent': 'okhttp/4.9.2',
  };

  const payload = {
    query: `mutation{ sendOTPMessage( mobile_number:{ country_code:"91", number:"${phone}"},user_type: 0,check_user_existence: false) { status data { is_registered } error httpStatusCode }}`,
    variables: {}
  };

  try {
    const response = await fetch("https://api.myjobee.com/user/token?appVersion=1.45.1", {
      method: "POST",
      headers,
      body: JSON.stringify(payload)
    });

    const result = await response.json();

    if (result?.data?.sendOTPMessage?.status === "ok") {
      const isRegistered = result.data.sendOTPMessage.data.is_registered;
      return res.status(200).json({
        message: isRegistered ? "Already Registered" : "OTP Sent Successfully",
        is_registered: isRegistered
      });
    } else {
      return res.status(500).json({ error: "API returned an error", result });
    }
  } catch (err) {
    return res.status(500).json({ error: err.message });
  }
}

function generateRandomString(length) {
  const chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
  return Array.from({ length }, () => chars[Math.floor(Math.random() * chars.length)]).join('');
}

export default async function handler(req, res) {
  const { num, otp, ref, dev, token } = req.body;

  if (!num || !otp || !ref || !dev || !token) {
    return res.status(400).json({ error: 'Missing required fields' });
  }

  // Random name generation
  const firstNames = ["Abhishek", "Rahul", "Ravi", "Amit", "Sagar", "Manish", "Yash", "Kunal"];
  const lastNames = ["Sharma", "Verma", "Patel", "Singh", "Yadav", "Tiwari", "Raj", "Mishra"];
  const fname = firstNames[Math.floor(Math.random() * firstNames.length)];
  const lname = lastNames[Math.floor(Math.random() * lastNames.length)];

  const payload = {
    query: `
      mutation updateJobSeeker(
        $email: String,
        $about_me: String,
        $aadhar_number: String,
        $dob: String,
        $gender: String,
        $lang: [lang_type],
        $registrationStep: String,
        $languages: [languages],
        $address: [address],
        $referral_code: String,
        $whatsapp_enable: Boolean,
        $mobile_number: mobile_number_input
      ) {
        updateJobSeeker(
          email: $email,
          about_me: $about_me,
          aadhar_number: $aadhar_number,
          dob: $dob,
          gender: $gender,
          lang: $lang,
          registration_step: $registrationStep,
          languages: $languages,
          address: $address,
          referral_code: $referral_code,
          whatsapp_enabled: $whatsapp_enable,
          mobile_number: $mobile_number
        ) {
          _id
        }
      }
    `,
    variables: {
      email: "",
      about_me: "",
      aadhar_number: null,
      dob: null,
      gender: "male",
      whatsapp_enable: true,
      mobile_number: {
        country_code: "91",
        number: num
      },
      lang: [{
        lang_code: "en",
        details: {
          first_name: fname,
          middle_name: "",
          last_name: lname
        }
      }],
      registrationStep: null,
      languages: [{
        _id: null,
        title: "English",
        code: "en",
        is_primary: true
      }],
      referral_code: ref,
      address: [{
        geoCoordinates: {
          type: "Point",
          coordinates: [28.6139298, 77.2088282]
        },
        radius: null,
        details: [{
          location_details: {
            address: "New Delhi",
            address2: "",
            area: "",
            state: "Delhi",
            country: "India",
            city: "New Delhi",
            zip: ""
          }
        }]
      }]
    }
  };

  const headers = {
    'Host': 'api.myjobee.com',
    'accept': 'application/json, text/plain, */*',
    'x-access-token': token,
    'device-id': dev,
    'x-api-key': 'saPWEAUkwbiStkiygODZqTDFPmsVAHC8J8S0+rRseHA=',
    'x-country-code': 'IN',
    'x-device-country-code': 'IN',
    'x-user-platform': 'android',
    'content-type': 'application/json',
    'accept-encoding': 'gzip',
    'user-agent': 'okhttp/4.9.2'
  };

  try {
    const response = await fetch("https://api.myjobee.com/jobSeeker?appVersion=1.45.1", {
      method: "POST",
      headers,
      body: JSON.stringify(payload)
    });

    const result = await response.json();

    const profileId = result?.data?.updateJobSeeker?._id;

    if (profileId) {
      return res.status(200).json({
        message: "Profile Created Successfully",
        profile_id: profileId
      });
    } else {
      return res.status(400).json({
        error: "Profile creation failed",
        details: result
      });
    }
  } catch (error) {
    return res.status(500).json({ error: error.message });
  }
}

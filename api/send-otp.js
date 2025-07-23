// File: api/send-otp.js

export default async function handler(req, res) { const phone = req.query.phone;

if (!phone || !/^\d{10}$/.test(phone)) { return res.status(400).json({ success: false, error: 'Invalid phone number' }); }

// Generate a fake device-id (32 characters) const dev = [...Array(32)].map(() => Math.floor(Math.random() * 16).toString(16)).join('');

const query = { query: mutation { sendOTPMessage( mobile_number: { country_code: \"91\", number: \"${phone}\" }, user_type: 0, check_user_existence: false ) { status data { is_registered registration_step } error httpStatusCode } }, variables: {} };

const headers = { 'accept': 'application/json, text/plain, /', 'device-id': dev, 'x-api-key': 'saPWEAUkwbiStkiygODZqTDFPmsVAHC8J8S0+rRseHA=', 'x-country-code': 'IN', 'x-device-country-code': 'IN', 'x-user-platform': 'android', 'content-type': 'application/json', 'user-agent': 'okhttp/4.9.2' };

try { const response = await fetch('https://api.myjobee.com/user/token?appVersion=1.45.1', { method: 'POST', headers, body: JSON.stringify(query) });

const result = await response.json();

if (result?.data?.sendOTPMessage?.data?.is_registered === false) {
  return res.status(200).json({ success: true, message: 'OTP sent', phone, dev });
} else {
  return res.status(200).json({ success: false, message: 'Already registered', phone });
}

} catch (error) { return res.status(500).json({ success: false, error: 'Request failed', detail: error.message }); } }


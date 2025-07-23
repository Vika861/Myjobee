// File: api/send-otp.js

export default async function handler(req, res) { if (req.method !== 'GET') { return res.status(405).json({ error: 'Method not allowed' }); }

const phone = req.query.phone; if (!phone) { return res.status(400).json({ error: 'Missing phone number' }); }

const dev = generateRandom(32);

const headers = { 'accept': 'application/json, text/plain, /', 'device-id': dev, 'x-api-key': 'saPWEAUkwbiStkiygODZqTDFPmsVAHC8J8S0+rRseHA=', 'x-country-code': 'IN', 'x-device-country-code': 'IN', 'x-user-platform': 'android', 'content-type': 'application/json', 'accept-encoding': 'gzip', 'user-agent': 'okhttp/4.9.2', };

const payload = { query: mutation { sendOTPMessage( mobile_number: { country_code: "91", number: "${phone}" }, user_type: 0, check_user_existence: false ) { status error httpStatusCode data { is_registered } } }, variables: {}, };

try { const response = await fetch('https://api.myjobee.com/user/token?appVersion=1.45.1', { method: 'POST', headers: headers, body: JSON.stringify(payload), });

const result = await response.json();
return res.status(200).json({ result });

} catch (err) { console.error(err); return res.status(500).json({ error: 'Something went wrong' }); } }

function generateRandom(length) { const characters = '1234567890abcdefghijklmnopqrstuvwxyz'; let result = ''; for (let i = 0; i < length; i++) { result += characters.charAt(Math.floor(Math.random() * characters.length)); } return result; }


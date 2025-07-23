export default async function handler(req, res) {
  const { num, ref, dev, token } = req.body;

  if (!num || !ref || !dev || !token) {
    return res.status(400).json({ error: 'Missing required fields' });
  }

  // Random names
  const firstNames = [
  "Aadarsh", "Abhay", "Abhijeet", "Abhimanu", "Abhinav", "Abhishek", "Akhil", "Aman", "Ambuj", "Amit",
  "Anand", "Anil", "Ankit", "Ankush", "Anuj", "Arjun", "Ashish", "Atul", "Avdesh", "Ayush", "Bhanu",
  "Bhavesh", "Chandan", "Deepak", "Dev", "Devbrat", "Dipu", "Ganesh", "Gaurav", "Gopal", "Hariom",
  "Harshit", "Himanshu", "Jatin", "Kapil", "Karan", "Kanhiya", "Krish", "Krishna", "Kunal", "Manish",
  "Mangal", "Mohan", "Mohit", "Monu", "Nishant", "Nitish", "Lav", "Parmod", "Parth", "Praduman",
  "Prashant", "Prem", "Raghu", "Rahul", "Raj", "Rakesh", "Rambhu", "Ramesh", "Ravi", "Ravindra",
  "Rishabh", "Rishi", "Rohan", "Ronak", "Roshan", "Sachin", "Sagar", "Sanjit", "Samar", "Sameer",
  "Sant", "Sanju", "Satish", "Satya", "Shivam", "Shirshant", "Shrikant", "Sohan", "Sonu", "Sonal",
  "Sourabh", "Sudhanshu", "Sudheer", "Sujeet", "Sumit", "Sunil", "Sushil", "Suraj", "Suresh", "Umesh",
  "Vijay", "Vikram", "Vinay", "Vinod", "Vishal", "Vishu", "Virat", "Vivek", "Yash", "Yogesh"
];

const lastNames = [
  "Aarya", "Agarwal", "Ahir", "Akela", "Arora", "Awasthi", "Banerjee", "Bhaduriya", "Bhatt", "Chakra",
  "Chakarvarti", "Chattarjee", "Chaubey", "Chaturvedi", "Chandravanshi", "Chauhan", "Choudhary",
  "Dhawal", "Dhawan", "Deshmukh", "Dubey", "Dokhle", "Gandhi", "Gokhil", "Ghoshal", "Gokul", "Gond",
  "Goswami", "Gupta", "Hooda", "Jaat", "Jain", "Jatara", "Jayes", "Jugi", "Kapoor", "Kumar", "Kharwar",
  "Kesari", "Kohli", "Kumhaar", "Kurmi", "Kushwaha", "Lala", "Lakhani", "Lohar", "Lokhande", "Malhotra",
  "Marvare", "Maurya", "Maali", "Mauryavanshi", "Mehra", "Mital", "Modi", "Naidu", "Naveen", "Nehru",
  "Patani", "Paatil", "Pal", "Pandey", "Paneri", "Panjiwan", "Pathak", "Patel", "Pele", "Prajapati",
  "Prashad", "Prabhu", "Raghuwanshi", "Raj", "Rajput", "Raja", "Ram", "Ramdin", "Raydu", "Rotle", "Roy",
  "Sardar", "Seikh", "Seth", "Sharma", "Singh", "Singhania", "Sukla", "Shinghle", "Surya", "Survanshi",
  "Suryavanshi", "Swasthi", "Talpade", "Talwar", "Tahrik", "Tilakdhari", "Tiwari", "Tripathi", "Trivedi",
  "Verma", "Yadav", "Yaduvanshi"
];
  const fname = firstNames[Math.floor(Math.random() * firstNames.length)];
  const lname = lastNames[Math.floor(Math.random() * lastNames.length)];

  const query = `
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
  `;

  const variables = {
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
    lang: [
      {
        lang_code: "en",
        details: {
          first_name: fname,
          middle_name: "",
          last_name: lname
        }
      }
    ],
    registrationStep: null,
    languages: [
      {
        _id: null,
        title: "English",
        code: "en",
        is_primary: true
      }
    ],
    referral_code: ref,
    address: [
      {
        geoCoordinates: {
          type: "Point",
          coordinates: [77.2088282, 28.6139298] // lon, lat
        },
        radius: null,
        details: [
          {
            location_details: {
              address: "New Delhi",
              address2: "",
              area: "",
              state: "Delhi",
              country: "India",
              city: "New Delhi",
              zip: ""
            }
          }
        ]
      }
    ]
  };

  const headers = {
    'Content-Type': 'application/json',
    'x-access-token': token,
    'x-api-key': 'saPWEAUkwbiStkiygODZqTDFPmsVAHC8J8S0+rRseHA=',
    'device-id': dev,
    'x-country-code': 'IN',
    'x-device-country-code': 'IN',
    'x-user-platform': 'android',
    'accept': 'application/json',
    'user-agent': 'okhttp/4.9.2'
  };

  try {
    const response = await fetch('https://api.myjobee.com/jobSeeker?appVersion=1.45.1', {
      method: 'POST',
      headers,
      body: JSON.stringify({ query, variables })
    });

    const json = await response.json();

    const profileId = json?.data?.updateJobSeeker?._id;

    if (profileId) {
      return res.status(200).json({
        status: "success",
        message: "Profile Created Successfully",
        profile_id: profileId
      });
    } else {
      return res.status(400).json({
        status: "error",
        message: "Failed to create profile",
        debug: json
      });
    }
  } catch (err) {
    return res.status(500).json({
      status: "error",
      message: "Server error",
      details: err.message
    });
  }
}



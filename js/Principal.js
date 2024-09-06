// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyALShCmbcwYAUG5BNmeAWBeSBj6GtHY8FM",
  authDomain: "ar-city-tour-2ee0e.firebaseapp.com",
  projectId: "ar-city-tour-2ee0e",
  storageBucket: "ar-city-tour-2ee0e.appspot.com",
  messagingSenderId: "372276398896",
  appId: "1:372276398896:web:68b96a23fd299c300dd6f5",
  measurementId: "G-E6BHY0B1LC"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
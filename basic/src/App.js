import logo from './logo.svg';
import {useState, useEffect} from 'react';
import './App.css';


import './App.css';
import axios from 'axios';
import { useSSRSafeId } from '@react-aria/ssr';
  
function App() {
  const [user,setuser]=useState([]);

  const loadUsers=async() =>{
    const result =await axios.get("http://localhost:8081/Palisha/page1.php");
    setuser(result.data.phpresult);
    console.log(result.data.phpresult);
  };
  useEffect(() => {
    loadUsers();
  },[]);
  return (
    <div className="App">
      <table>
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>email</th>
        </tr>
        <tbody>
          {user.map((res)=> 
        <tr>
          <td>{res.firstname}</td>
          <td>{res.lastname}</td>
          <td>{res.email}</td>
        </tr>
        )}
        </tbody>
      </table>
    </div>
  );
  
}
export default App;

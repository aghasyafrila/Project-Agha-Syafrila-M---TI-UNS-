import {  Link } from "react-router-dom";
import './login.css';
import logo from "./assets/img/Blob.png";
import logo_title from "./assets/img/icon-title.png";
import mark from "./assets/img/checked.png";

function Login(props) {

    return (
        <div className="wrapper">
            <div className="login-box">
                <div className="login-title">
                    <img src={logo_title} alt="logo sign in" />
                    <h1>Sign In</h1>
                </div>
                <div className="login-input">
                    <div className

                        ="input-text">
                        <h3>Email</h3>
                        <input type="text" className="form-control" placeholder="Masukkan Email" />
                    </div>
                    <div className="input-text">
                        <h3>Password</h3>
                        <input type="password" className="form-control" placeholder="masukkan password" />
                    </div>
                    <label className="rmbr-me">
                        <input type="checkbox" name="check" />
                        <div className="checkmark"><img src={mark} alt="mark"/></div>
                        <h3>Remember me</h3>
                        
                    </label>
                    

                </div>
                <div className="login-btn">
                   
                    <Link to="/dashboard">Log in</Link>
                </div>


            </div>
            <div className="logo-box">
                <img src={logo} alt="logo" />

            </div>


        </div>

    );
}
export default Login;

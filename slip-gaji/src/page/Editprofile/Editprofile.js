import React from "react";
import { Link } from "react-router-dom";
import './Editprofile.css';

class Editprofile extends React.Component{
    render(){
        return(
            <div className="editprofile-wrapper">
                <h1>MY PROFILE</h1>

                <form>
                    <div className="input">
                        <label><h2>NAMA LENGKAP</h2> <input type='text' name="namalengkap"/></label>
                        <label><h2>USERNAME</h2> <input type='text' name="username"/></label>
                        <label><h2>PASSWORD</h2> <input type='password' name="password"/></label>
                        <label><h2>KONFIRMASI PASSWORD</h2> <input type='password' name="password1"/></label>
                        <label><h2>ROLE</h2> <input type='checkbox' name="role"/></label>
                        <label><h2>JENIS KELAMIN</h2> <input type='checkbox' name="jenis_kelamin"/></label>
                    </div>
                    <div className="file-input">
                        <div className="file-upload">File upload</div>
                        <div className="submit"><button type="submit">Simpan</button><Link>Batal</Link></div>
                    </div>
                </form>

            </div>

        );
    }
}
export default Editprofile;
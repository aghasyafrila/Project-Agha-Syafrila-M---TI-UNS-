import React from "react";
import './sidebar.css';
import Iconhome from "../assets/img/icon-title.png";
import burgerMenu from "../assets/img/Burger-menu.png";
import pp from "../assets/img/PP.png";
import { Link, Outlet } from "react-router-dom";


function HamburgerMenu(props) {
    return (
        <div className="burger" onClick={props.onClick}>
            <img src={burgerMenu} alt="burger-icon " />
        </div>
    );
}

class Sidebar extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            switch: false,
            menuprofile: false
        }
        this.onMenunav = this.onMenunav.bind(this);

        this.onSwitchNav = this.onSwitchNav.bind(this);
    }
    onMenunav(){
        this.setState((toggle)=>({menuprofile: !toggle.menuprofile}))
    }
    onSwitchNav() {
        this.setState((toggle) => ({ switch: !toggle.switch }))
    }



    render() {
        console.log(this.state.switch);
        // const toggle = this.state.switch;


        return (
            <div className="wrapper-dashboard">

                <nav>

                    <div className='navbar-brand'>
                        <img src={Iconhome} alt="icon-home" />
                        <h1>Payslip</h1>
                    </div>
                    <div className="profile-section">
                        <HamburgerMenu onClick={this.onSwitchNav} />
                        <div className="profile" onClick={this.onMenunav}>
                            <h2>
                                Joko Arwanto
                            </h2>
                            <img src={pp} alt="profile-img" />
                        </div>
                        <div className={this.state.menuprofile ? 'profile-dropdown' : 'profile-dropdown active'}>
                            <ul>
                                <li><Link to='/dashboard/editprofile'><img src={Iconhome} alt="profilesection" />Edit Profile</Link></li>
                                <li><Link to='/'><img src={Iconhome} alt="profilesection" />Logout</Link></li>
                            </ul>
                        </div>
                    </div>

                </nav>



                <aside className='sidebar-menu'>


                    <div className='sidebar'>
                        <div className="sidebar-item">
                            <img src={Iconhome} alt="sidebar1" />
                            <h2>Dashboard</h2>
                        </div>
                        <div className="sidebar-item">                            <img src={Iconhome} alt="sidebar1" />
                            <h2>Dashboard</h2>
                        </div>

                    </div>
                    <div className="content">

                        <Outlet />





                    </div>

                </aside>

            </div>

        );
    }
}

export default Sidebar;
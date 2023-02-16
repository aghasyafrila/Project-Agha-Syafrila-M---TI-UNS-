import React from "react";
import './dashboard.css';
import Iconhome from "./assets/img/icon-title.png";


import Graph2 from "./chart/chart2";
import Graph1 from "./chart/chart1";
import { faker } from '@faker-js/faker';



function Content(props) {
    const jumlah = props.jumlah;
    const nama = props.nama;
    const graph = props.graph;
    return (
        <div className="graph-project">
            <div className="graph-header" style={props.style}>
                <div className="graph-count">
                    <h1>{jumlah}</h1>
                    <h2>{nama}</h2>
                </div>
                <div className="graph-icon">

                    <img src={Iconhome} alt="graph-icon" />
                </div>

            </div>
            <div className="graph-content">


                {graph}


            </div>

        </div>

    );
}


class Dashboard extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            switch: true
        }

        this.onSwitchNav = this.onSwitchNav.bind(this);
    }

    onSwitchNav() {
        this.setState((toggle) => ({ switch: !toggle.switch }))
    }



    render() {
        console.log(this.state.switch);

        return (

            <div className="content-wrapper">
                <div className="content-fixed">
                    <h1>SELAMAT DATANG! Samuel Chan</h1>
                    <div className="graph-data">
                        <Content jumlah={faker.datatype.number({ min: 0, max: 90 })} nama="Project" graph={<Graph1 />} style={{ background: '#BD3913', color: 'white' }} />
                        <Content jumlah={faker.datatype.number({ min: 92, max: 1000 })} nama="Pegawai" graph={<Graph2 />} style={{ background: '#9FBEAE', color: 'black' }} />


                    </div>
                </div>


            </div>

        );
    }
}

export default Dashboard;
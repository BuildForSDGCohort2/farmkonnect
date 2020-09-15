import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import Header from './Header'
import Content from './Content'
import Footer from './Footer'


class App extends Component {
    render() {
        return (
            <BrowserRouter>
                <div>
                     <Header />

                   <Content />

                    <Footer /> 
                </div>
            </BrowserRouter>

        );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}

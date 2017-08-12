import React, { Component } from "react"

class LoginForm extends Component {
    state = {
        "email": "",
        "password": "",
    }

    onChange = (e) => {
        this.setState({
            [e.target.id]: e.target.value,
        }, () => {
            console.log(this.state)
        })
    }

    render() {
        return (
            <form>
                <div className="form-group">
                    <label htmlFor="email">Email</label>
                    <input onChange={this.onChange} type="email" className="form-control" id="email" placeholder="Email" />
                </div>
                <div className="form-group">
                    <label htmlFor="password">Password</label>
                    <input onChange={this.onChange} type="password" className="form-control" id="password" placeholder="Password" />
                </div>
                <button type="submit" className="btn btn-default">Log in</button>
            </form>
        )
    }
}

export default LoginForm

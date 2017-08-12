import React, { Component } from "react"

class RegisterForm extends Component {
    state = {
        "email": "",
        "password": "",
        "password_confirmation": "",
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
                <div className="form-group">
                    <label htmlFor="password_confirmation">Confirm password</label>
                    <input onChange={this.onChange} type="password" className="form-control" id="password_confirmation" placeholder="Password" />
                </div>
                <button type="submit" className="btn btn-default">Register</button>
            </form>
        )
    }
}

export default RegisterForm

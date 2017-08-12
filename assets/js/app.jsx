import React from "react"
import { render } from "react-dom"

import LoginForm from "./login-form"
import RegisterForm from "./register-form"

const login = document.querySelector(".login")

if (login) {
    render(<LoginForm />, login)
}

const register = document.querySelector(".register")

if (register) {
    render(<RegisterForm />, register)
}

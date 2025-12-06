// src/api.js
import axios from "axios";

const API = axios.create({
    baseURL: "http://127.0.0.1:8000/api",
    headers: {
        Accept: "application/json",
    },
});

API.interceptors.request.use((config) => {
    const token = localStorage.getItem("token");
    if (token) {
        config.headers.Authorization = `Bearer ${token}`;
    }
    return config;
});

API.interceptors.response.use(
    (response) => response,
    (error) => {
        if (error.response?.status === 401) {
            localStorage.removeItem("token");
            localStorage.removeItem("user");

            // ✅ BIAR REACT YANG HANDLE
            if (!window.location.pathname.includes("login")) {
                window.location.replace("/login");
            }
        }
        return Promise.reject(error);
    }
);

export default API;

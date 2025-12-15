import { useState } from "react";
import { useNavigate } from "react-router-dom";
import API from "../api";
import { useAuth } from "../context/AuthContext";

export default function Login() {
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const navigate = useNavigate();
    const { login } = useAuth();

    const handleSubmit = async (e) => {
        e.preventDefault();

        try {
            const res = await API.post("/login", { email, password });

            const token = res.data.token;
            if (!token) throw new Error("Token tidak ditemukan");

            localStorage.setItem("token", token);

            const userRes = await API.get("/user");

            login(userRes.data, token);

            navigate("/");
        } catch (err) {
            alert("Login gagal! Email / password salah");
        }
    };

    return (
        <div className="min-h-screen flex items-center justify-center bg-black">
            <form
                onSubmit={handleSubmit}
                className="bg-black border border-red-600 p-8 rounded-xl shadow-lg w-full max-w-md"
            >
                <h2 className="text-3xl font-extrabold mb-8 text-center text-red-500">
                    Login
                </h2>

                <input
                    type="email"
                    placeholder="Email"
                    className="w-full mb-4 p-3 bg-black text-white border border-red-600 rounded focus:ring-2 focus:ring-red-500"
                    value={email}
                    onChange={(e) => setEmail(e.target.value)}
                    required
                />

                <input
                    type="password"
                    placeholder="Password"
                    className="w-full mb-6 p-3 bg-black text-white border border-red-600 rounded focus:ring-2 focus:ring-red-500"
                    value={password}
                    onChange={(e) => setPassword(e.target.value)}
                    required
                />

                <button
                    type="submit"
                    className="w-full bg-red-600 text-white py-3 rounded font-semibold hover:bg-red-700 transition"
                >
                    Login
                </button>
            </form>
        </div>
    );
}

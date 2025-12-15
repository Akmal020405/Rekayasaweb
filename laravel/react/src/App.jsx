import { Routes, Route, Link, useNavigate } from "react-router-dom";
import Login from "./pages/Login";
import PostList from "./pages/PostList";
import PostForm from "./pages/PostForm";
import muLogo from "./assets/mu.png"; // 🔴⚫ Logo MU

export default function App() {
    const navigate = useNavigate();
    const token = localStorage.getItem("token");

    const logout = () => {
        localStorage.removeItem("token");
        navigate("/login");
    };

    return (
        <div className="min-h-screen bg-black text-white">
            {/* ===== NAVBAR ===== */}
            <nav className="bg-gradient-to-r from-red-700 to-black shadow-red-700 shadow">
                <div className="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">

                    {/* Logo + Nama */}
                    <Link
                        to="/"
                        className="flex items-center gap-3 text-white text-2xl font-extrabold tracking-wide"
                    >
                        Manchester is Red
                    </Link>

                    {/* MENU */}
                    <div className="flex items-center gap-3">
                        {/* + Buat Post */}
                        {token && (
                            <Link
                                to="/posts/create"
                                className="bg-red-600 text-white px-4 py-2 rounded-full font-semibold hover:bg-red-700 transition shadow-md"
                            >
                                + Buat Post
                            </Link>
                        )}

                        {/* Login / Logout */}
                        {!token ? (
                            <Link
                                to="/login"
                                className="bg-white text-red-700 px-5 py-2 rounded-full font-semibold hover:bg-gray-200 transition shadow"
                            >
                                Login
                            </Link>
                        ) : (
                            <button
                                onClick={logout}
                                className="bg-red-600 text-white px-5 py-2 rounded-full font-semibold hover:bg-red-700 transition shadow"
                            >
                                Logout
                            </button>
                        )}
                    </div>
                </div>
            </nav>

            {/* ===== PAGE CONTENT ===== */}
            <main className="max-w-6xl mx-auto p-6">
                <Routes>
                    <Route path="/" element={<PostList />} />
                    <Route path="/login" element={<Login />} />
                    <Route path="/posts/create" element={<PostForm />} />
                    <Route path="/posts/edit/:id" element={<PostForm />} />
                </Routes>
            </main>
        </div>
    );
}

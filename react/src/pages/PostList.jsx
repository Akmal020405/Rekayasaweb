import { useEffect, useState } from "react";
import { Link } from "react-router-dom";
import API from "../api.js";
import { useAuth } from "../context/AuthContext.jsx";
import muLogo from "../assets/mu.png"; // 🔴⚫ logo MU

export default function PostList() {
    const [posts, setPosts] = useState([]);
    const [loading, setLoading] = useState(true);
    const { isAuthenticated, user } = useAuth();

    useEffect(() => {
        loadPosts();
    }, []);

    const loadPosts = async () => {
        try {
            const res = await API.get("/posts");
            if (Array.isArray(res.data)) {
                setPosts(res.data);
            } else if (Array.isArray(res.data.data)) {
                setPosts(res.data.data);
            } else {
                setPosts([]);
            }
        } catch (err) {
            console.error(err);
            setPosts([]);
        } finally {
            setLoading(false);
        }
    };

    const handleDelete = async (id) => {
        if (!window.confirm("Yakin hapus post?")) return;
        try {
            await API.delete(`/posts/${id}`);
            loadPosts();
        } catch {
            alert("Gagal menghapus post");
        }
    };

    const canModify = (post) =>
        isAuthenticated && user && user.id === post.user_id;

    if (loading) {
        return (
            <div className="text-center text-red-500 text-xl mt-20">
                Memuat post...
            </div>
        );
    }

    return (
        <div>
            {/* 🔴⚫ HEADER MU STYLE */}
            <div className="flex items-center gap-3 mb-10">
                <img src={muLogo} alt="MU Logo" className="w-12 h-12" />
                <h1 className="text-4xl font-extrabold text-red-600 drop-shadow">
                    Daftar Post
                </h1>
            </div>

            {posts.length === 0 && (
                <p className="text-gray-300 italic">Belum ada post tersedia.</p>
            )}

            {/* GRID CARD */}
            <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                {posts.map((post) => (
                    <div
                        key={post.id}
                        className="bg-black/80 border border-red-600 rounded-2xl shadow-lg hover:shadow-red-500/40 transition p-6 text-white"
                    >
                        <h3 className="text-xl font-bold text-red-500">
                            {post.title}
                        </h3>

                        <p className="text-sm text-gray-300 mt-1">
                            oleh {post.user?.name || "Anonim"}
                        </p>

                        <p className="mt-4 text-gray-200 line-clamp-3">
                            {post.content}
                        </p>

                        {canModify(post) && (
                            <div className="mt-4 flex gap-2">
                                <Link
                                    to={`/posts/edit/${post.id}`}
                                    className="px-4 py-1 rounded-full bg-red-600 text-white text-sm hover:bg-red-700"
                                >
                                    Edit
                                </Link>
                                <button
                                    onClick={() => handleDelete(post.id)}
                                    className="px-4 py-1 rounded-full bg-gray-800 border border-red-500 text-red-500 text-sm hover:bg-red-700 hover:text-white"
                                >
                                    Hapus
                                </button>
                            </div>
                        )}
                    </div>
                ))}
            </div>

            {/* 🔴⚫ FLOATING BUTTON */}
            {isAuthenticated && (
                <Link
                    to="/posts/create"
                    className="fixed bottom-8 right-8 bg-red-600 text-white w-14 h-14 flex items-center justify-center text-3xl rounded-full shadow-lg hover:bg-red-700 transition"
                >
                    +
                </Link>
            )}
        </div>
    );
}

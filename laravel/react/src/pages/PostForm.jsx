import { useEffect, useState } from "react";
import { useNavigate, useParams } from "react-router-dom";
import API from "../api";

export default function PostForm() {
    const [title, setTitle] = useState("");
    const [content, setContent] = useState("");
    const navigate = useNavigate();
    const { id } = useParams();
    const isEdit = !!id;

    useEffect(() => {
        if (isEdit) loadPostData();
    }, [isEdit]);

    const loadPostData = async () => {
        try {
            const res = await API.get(`/posts/${id}`);
            const data = res.data.data ?? res.data;
            setTitle(data.title);
            setContent(data.content);
        } catch (err) {
            alert("Gagal memuat data post");
        }
    };

    const handleSubmit = async (e) => {
        e.preventDefault();

        try {
            if (isEdit) {
                await API.put(`/posts/${id}`, { title, content });
                alert("Post berhasil diperbarui!");
            } else {
                await API.post("/posts", { title, content });
                alert("Post berhasil ditambahkan!");
            }
            navigate("/");
        } catch (err) {
            alert("Aksi gagal. Pastikan sudah login.");
        }
    };

    return (
        <div className="max-w-2xl mx-auto bg-black p-8 rounded-xl shadow-lg border border-red-600">
            <h2 className="text-3xl font-extrabold text-red-500 mb-6">
                {isEdit ? "✏ Edit Post" : "➕ Tambah Post"}
            </h2>

            <form onSubmit={handleSubmit} className="space-y-6">
                <div>
                    <label className="block font-semibold text-red-400 mb-1">
                        Judul
                    </label>
                    <input
                        type="text"
                        value={title}
                        onChange={(e) => setTitle(e.target.value)}
                        required
                        className="w-full bg-black border border-red-600 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-500 focus:outline-none"
                    />
                </div>

                <div>
                    <label className="block font-semibold text-red-400 mb-1">
                        Konten
                    </label>
                    <textarea
                        rows="6"
                        value={content}
                        onChange={(e) => setContent(e.target.value)}
                        required
                        className="w-full bg-black border border-red-600 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-500 focus:outline-none"
                    />
                </div>

                {/* BUTTON ACTION */}
                <div className="flex justify-end gap-3">
                    {/* BATAL */}
                    <button
                        type="button"
                        onClick={() => navigate("/")}
                        className="px-5 py-2 rounded-lg border border-red-600 text-red-400 hover:bg-red-700/20 transition"
                    >
                        Batal
                    </button>

                    {/* SIMPAN */}
                    <button
                        type="submit"
                        className="px-6 py-2 rounded-lg bg-red-600 text-white font-semibold hover:bg-red-700 transition shadow"
                    >
                        {isEdit ? "Simpan Perubahan" : "Tambah Post"}
                    </button>
                </div>
            </form>
        </div>
    );
}

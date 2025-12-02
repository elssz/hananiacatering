<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin - Hanania Katering</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-red-800">

  <div class="bg-white w-[350px] p-6 rounded-lg shadow-lg">
    <h4 class="text-xl font-bold text-center mb-6">Login Admin</h4>

    <form>
      <div class="mb-4">
        <label class="block text-sm font-medium mb-1">Username</label>
        <input type="text" placeholder="admin"
          class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-red-300">
      </div>

      <div class="mb-4">
        <label class="block text-sm font-medium mb-1">Password</label>
        <input type="password" placeholder="••••••••"
          class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-red-300">
      </div>

      <button type="submit"
        class="w-full bg-red-700 text-white py-2 rounded hover:bg-red-800 transition">
        Masuk
      </button>

      <p class="text-center text-xs text-gray-500 mt-4">
        © 2025 Hanania Katering
      </p>
    </form>
  </div>

</body>
</html>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-slate-900 flex justify-center items-center h-screen">
<div class="w-full max-w-lg ">

  <form class="bg-white shadow-md rounded px-6 pt-6 pb-8 mb-4 " action="/index" method="post">
    @csrf
    <div class="mb-4 ">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="username" type="text" placeholder="Username">
    </div>
    <div class="mb-6">
      <label class="block text-gray-500 text-sm font-bold mb-4" for="password">
        Password
      </label>
      <input name="password" class="shadow appearance-none border border-gray-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="...............">
      <p class="text-blue-800 text-xs italic">Enter a strong password.</p>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Sign In
      </button></a>

      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="/Reset">
        Forgot Password?
      </a>
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="/register1">
      Have no account register here?
      </a>
    </div>
  </form>

</div>
</body>
</html>

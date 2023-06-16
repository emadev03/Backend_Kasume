/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/layouts/mainAdmin.blade.php',
    './resources/layouts/mainSuperAdmin.blade.php',
    './resources/superadmin/addAdmin.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}


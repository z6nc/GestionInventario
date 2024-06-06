/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        Principal: ['Gagalin', 'sans-serif'], // Cambiar a Gagalin
        Secundario: ['Barlow', 'sans-serif'], // Cambiar a Gagalin
      },
      colors: {
        primario: '#737373',
        ColorInput: '#CDC7BC',
      },
      backgroundColor:{
        butonPrincipal: '#150D0A',
      },
    },
  },
  plugins: [],
}
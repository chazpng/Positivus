/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		"./*.{php,html,js}",
		"./acf/**/*.{php,html,js}",
		"./frontend/**/*.{php,html,js}",
		"./template-parts/*.{php,html,js}",
		"./node_modules/tw-elements/dist/js/**/*.js"
	],
	theme: {
		extend: {},
	},
	plugins: [require("tw-elements/dist/plugin.cjs")],
	darkMode: "class"
}

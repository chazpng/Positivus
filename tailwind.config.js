const defaultTheme = require('tailwindcss/defaultTheme')

function rem2px(input, fontSize = 16) {
  if (input == null) {
    return input;
  }
  switch (typeof input) {
    case 'object':
      if (Array.isArray(input)) {
        return input.map((val) => rem2px(val, fontSize));
      }
      const ret = {};
      for (const key in input) {
        ret[key] = rem2px(input[key], fontSize);
      }
      return ret;
    case 'string':
      return input.replace(
        /(\d*\.?\d+)rem$/,
        (_, val) => `${parseFloat(val) * fontSize}px`,
      );
    case 'function':
      return eval(input.toString().replace(
        /(\d*\.?\d+)rem/g,
        (_, val) => `${parseFloat(val) * fontSize}px`,
      ));
    default:
      return input;
  }
}

/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		"./*.{php,html,js}",
		"./acf/**/*.{php,html,js}",
		"./frontend/**/*.{php,html,js}",
		"./template-parts/*.{php,html,js}"
	],
	darkMode: 'class',
	safelist: [
		{
      pattern: /./, // the "." means "everything"
    }
	],
	theme: {
		colors: {
      "white": "#FFF",
      gray: {
        30: "#B3B9C6",
        70: "#0E0E14",
        300: "#C4C8D0",
        400: '#676F7D',
        600: '#4b5563',
        900: '#111827'
      },
      emerald: {
        300: '#6DE5B6',
      },
      indigo: {
        100: '#f4e7ff',
        400: '#818CF8',
        500: '#6366F1',
        600: '#4f46e5',
      },
      'blue': '#1fb6ff',
      'purple': '#7e5bef',
      'pink': '#ff49db',
      'orange': '#ff7849',
      'green': '#13ce66',
      'yellow': '#ffc82c',
      'gray-dark': '#273444',
      'gray-light': '#d3dce6',
    },
		fontFamily: {
      sans: ['Graphik', 'sans-serif'],
      serif: ['Merriweather', 'serif'],
      sans: ['Inter', ...defaultTheme.fontFamily.sans],
    },
    extend: {
      fontSize: {
        'fluid-1': 'clamp(20px, calc(1.48rem + 2.03vw), 60px)',
        'fluid-2': 'clamp(3.27rem, calc(2.31rem + 4.79vw), 5.72rem)',
      },
      spacing: {
        ...rem2px(defaultTheme.spacing),
        '8xl': '96rem',
        '9xl': '128rem',
      },
      margin: {
        ...rem2px(defaultTheme.spacing),
        '160px': '160px',
      },
      borderRadius: {
        '4xl': '2rem',
      },
      minHeight: (theme) => ({
        ...theme('spacing'),
      }),
    }
	},
	plugins: [
	],
}

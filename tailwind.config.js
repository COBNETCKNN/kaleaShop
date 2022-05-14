module.exports = {
    content: require('fast-glob').sync([
        './**/*.php'
    ]),
  theme: {
    screens: {
                'sm': '100%',
                'md': '100%',
                'lg': '1024px',
                'xl': '1280px',
                '2xl': '1700px',
            },

    extend: {
      fontFamily: {
            'kanit': ['Kanit'],
            'lovelace' : ["Lovelace", "sans-serif"],
            'montserrat': ['Montserrat'],
            'calibri': ['Calibri'],
        },
      colors: {
        konfiguratorRed: '#ED1D24',
        kategorije: '#888888',
        grayBackground: '#E5E5E5',
        grayText: '#3B3B3B',
        addToCartButton: '#EB001B',
        addToCartText: '#E4CDCD',
        footerText: '#888888',
        pageTitle: '#191919',
        cartBackground: '#E8E8E8',
        frontPageGray: '#F7F7F7',
        aboutUsBackground: '#222222',
        aboutUsTitle: '#BFBFBF',
        kompletnoOpremanjeBackground: '#222222',
        headerDropDownTitle: '#939598',


      },
    },
  },
  plugins: [],
}

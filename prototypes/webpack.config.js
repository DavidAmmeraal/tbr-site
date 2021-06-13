const path = require('path');
const glob = require('glob');
const HtmlWebpackPlugin = require('html-webpack-plugin');

const FRAGMENTS_PATH = path.resolve('./src/fragments');

const pages = glob.sync( './src/pages/**/*.ejs' ).map(
  p => {
    const filename = path.basename(p, '.ejs');
    return new HtmlWebpackPlugin({
      template: p,
      filename: `${filename}.html`,
      FRAGMENTS_PATH
    })
  }
);

module.exports = {
  entry: './src/index.js',
  mode: 'development',
  devServer: {
    watchContentBase: true,
  },
  output: {
    filename: 'main.js',
    path: path.resolve(__dirname, 'dist'),
  },
  module: {
    rules: [
      {
        test: /\.s[ac]ss$/i,
        use: [
          // Creates `style` nodes from JS strings
          "style-loader",
          // Translates CSS into CommonJS
          "css-loader",
          // Compiles Sass to CSS
          "sass-loader",
        ],
      },
      {
        test: /\.(png|jpe?g|gif)$/i,
        use: [
          {
            loader: 'file-loader',
          },
        ],
      },
    ],
  },
  plugins: [...pages],
};
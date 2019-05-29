# Installing Node

WordPressify requires Node v7.5+. This is the only global dependency. You can download Node **[here](https://nodejs.org/)**.

Node.js is a JavaScript runtime built on Chrome’s V8 JavaScript engine. Node.js uses an event-driven, non-blocking I/O model that makes it lightweight and efficient. Node.js’ package ecosystem, npm, is the largest ecosystem of open source libraries in the world.

# Set Up Project

**1. Install Dependencies**

```
npm install
```

**2. Create .env File**

- Duplicate the `.env.example` and rename to `.env`, then proceed to fill out env constants and create a new database if needed.

**3. Update Theme / Other Files**

- Update the theme folder name found under `src/themes/mythemename` to match what's set in the `.env` file.
- Update the `package.json` file to match the repo name.
- Update the `src/themes/mythemename/style.css` "Theme Name".

**4. Install Wordpress**

- On the first run we need to install WordPress, we do this once by running the command:

```
npm run install:wordpress
```

- It will fetch the latest WordPress version, which is the build we use for the development server.

**5. Start Workflow**

- We are ready to start our development server with the command:

```
npm run dev
```

**6. Wordpress Plugins**

- If you want to add or build WordPress plugins, you can do that from the directory:

```
src/plugins/
```

**7. Production Files**

- To generate your distribution files run the command:

```
npm run prod
```

# External Libraries

Including external JavaScript libraries is as simple as installing the npm script and including it in the **gulpfile.js**

```javascript
/* -------------------------------------------------------------------------------------------------
Header & Footer JavaScript Boundles
-------------------------------------------------------------------------------------------------- */

const headerJS = [
	'node_modules/jquery/dist/jquery.js',
	'node_modules/nprogress/nprogress.js',
	'node_modules/aos/dist/aos.js',
	'node_modules/isotope-layout/dist/isotope.pkgd.js'
];
const footerJS = [
	'src/js/**'
];

//--------------------------------------------------------------------------------------------------
```

You can include the scripts in the head of the page before the DOM is loaded by placing them in the **headerJS** array or in the footer of the page after the DOM is loaded in the **footerJS** array. Only footer scripts are processed with Babel thus supporting ES6, however you can change this in the configuration if you want to run both header and footer scripts with Babel.

A build restart is required for changes to take effect.
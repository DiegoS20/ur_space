const mix = require("laravel-mix");
const fs = require("fs");

mix.disableSuccessNotifications();
const getFiles = function (dir) {
    return fs.readdirSync(dir).filter((file) => {
        return fs.statSync(`${dir}/${file}`).isFile();
    });
};

getFiles("resources/scss").forEach((filepath) => {
    mix.sass(`resources/scss/${filepath}`, "css").version();
});

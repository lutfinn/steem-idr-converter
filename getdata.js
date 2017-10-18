var URL = require('url').Url;
var fs = require('fs');

function load() {
    if (!fs.existsSync('tesdata.json')) {
        return;
    }

    var c = fs.readFileSync('tesdata.json', {encoding: 'utf8', flag: 'r'});
    if (c) {
        c = JSON.parse(c);
        if (c) {
            state = c;
        }
    }
}

function save() {
    fs.writeFileSync('tesdata.json', JSON.stringify(state), {encoding: 'utf8', flag: 'w', mode: 0o666});
}

console.log('tes');
var myurl = new URL('https://vip.bitcoin.co.id/api/btc_idr/ticker');
var a = myurl;//JSON.stringify(myurl);
console.log(a.toJSON);

person = "";
$.getJSON('//geoip.nekudo.com/api/', function(data) {
    person = JSON.parse(JSON.stringify(data, null, 2));
    console.log(person.country.code);
    delete person;
});


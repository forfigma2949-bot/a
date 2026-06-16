// №1
{
    let a = 452;
    if (a < 0) {
        console.log("Negative");
    } else {
        console.log("Positive");
    }

    let b = 'kgkgkgkgkgkgkg';
    console.log(b.length);

    console.log(b[b.length - 1]);

    let c = 13;
    if (c % 2 == 0) {
        console.log("Even");
    } else {
        console.log("Odd");
    }

    let d1 = 'abc';
    let d2 = 'ade';
    if (d1[0] === d2[0]) {
        console.log("Sovpadenie");
    } else {
        console.log("Ne sovpadenie");
    }

    let e = 'бббббь';
    if (e[e.length - 1] === 'ь') {
        console.log(e[e.length - 2]);
    } else {
        console.log(e[e.length - 1]);
    }
}

// №1.2
let a2 = 45;
console.log(a2.toString()[0]);

let b2 = a2.toString();
console.log(b2[b2.length - 1]);

console.log(parseInt(b2[0]) + parseInt(b2[b2.length - 1]));

let c2 = 6246246;
let d = c2.toString();
console.log(d.length);

  let d1 = 34;
    let d2 = 35;
    d1 = d1.toString(); d2 = d2.toString();
    if (d1[0] === d2[0]) {
        console.log("Sovpadenie");
    } else {
        console.log("Ne sovpadenie");
    }


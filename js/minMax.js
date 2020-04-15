// Min - Max
// Expected output: 1 2 3 6

// Push 1 [1] min: 1 max: 1 1*1 = 1
// Push 2 [1,2] min: 1 max: 2 1*2 = 2
// Push 3 [1,2,3] min: 1 max: 3 1*3 = 3
// Pop  1 [2,3] min: 2 max: 3 2*3 = 6

const operations = ['push', 'push', 'push', 'pop'];
const x = [1,2,3,1];

const minMax = (operations, x) => { 

    let ordered = [];
    let queue = []
    let calc = null;

    operations.forEach((value, key) => {
        if(value == 'push') {
            ordered.push(x[key]);
            ordered.sort();
        }

        if(value == 'pop') {
            let clave = ordered.indexOf(x[key]);
            clave = ordered.shift();
        }

        calc = Math.min(...ordered) * Math.max(...ordered);
        queue.push(calc);          
    });

    return queue;
}

const result = minMax(operations, x);
console.log(result);
export class MYFunc {
    constructor() {
        
    }

    ConvertToIDR(number) {
        const pricing = new Intl.NumberFormat("en-US", {
            currency:"IDR",
            style: "currency",
        }).format(number)
        return pricing.toString()
    }

    isPrime(number) {
        if (number === 1) {
            return "-"
        }
        for (let i = 2; i < number; i++) {
            if (number % i == 0) {
                return "-"
            }
        }
        return number.toString()
    }

    isGenap(number) {
        if (number % 2 === 0) {
            return number.toString()
        } else {
            return "-"
        }
    }

    factorials(number) {
        let hasil = 1
        for(let i=1;i<=number;i++) {
            hasil = hasil * i
        }

        return hasil.toString()
    }
}
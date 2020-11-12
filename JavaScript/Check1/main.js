let numbers = [2, 5, 12, 13, 15, 18, 22];
function isEven(num) {
    for (let i = 0; i < numbers.length; i++) {
        num = numbers[i];
        if (numbers[i]%2==0) {
    console.log(num + 'は偶数です');
    }
}
}
isEven();


class Car {
    constructor(gasoline,number){
        this.gasoline=gasoline;
        this.number=number;
    }
    getNumGas(){
        console.log(`ガソリンは${this.gasoline}です。ナンバーは${this.number}です`);
    }
}
let PRIUS = new Car("40L",8008);
PRIUS.getNumGas();



// クラス＝コンストラクタ（構成要素）＋メソッド（関数・処理）
// インスタンス（実体）⇨NEWCLASS定義、メソッド
// オブジェクト＝モノ、メソッド、パラメータ
// letは再定義不可、varは可能
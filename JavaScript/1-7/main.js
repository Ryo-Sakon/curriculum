class Taiyaki {
    constructor(flavor){
        this.flavor=flavor;
    }
    checkFlavor(){
        console.log(`中身は${this.flavor}です`);
    }
}
let Anko = new Taiyaki('あんこ');
let Cream = new Taiyaki('クリーム');
let Cheese = new Taiyaki('チーズ');
Anko.checkFlavor();
Cream.checkFlavor();
Cheese.checkFlavor();
// クラス＝コンストラクタ（構成要素）＋メソッド（関数・処理）
// インスタンス（実体）⇨NEWCLASS定義、メソッド
// オブジェクト＝モノ、メソッド、パラメータ
// letは再定義不可、varは可能
// thisはclass名・あなた
fun main() {
    println("Bem vindo ao Byte Bank")
    var contaNickolas = Conta("Nickolas", 1001)

}

class Conta(val titular: String, val numeroConta: Int) {

    var saldo: Double = 0.0
        private set //Isso permite que apenas a classe modifique o atributo, mas que qualquer um possa retornar pois o get é publico

    fun depositar(valor: Double) {
        if (valor > 0) {
            this.saldo += valor
        }
    }

    fun sacar(valor: Double) {
        when {
            valor <= 0 -> println("Precisa sacar um valor maior do que zero")
            this.saldo < valor -> println("Saldo insuficiente")
            else -> this.saldo -= valor
        }
    }

    fun tranferir(contaDestino: Conta, valor: Double): Boolean {
        when {
            valor <= 0 -> {
                println("Precisa transferir um valor maior do que zero")
                return false
            }

            this.saldo < valor -> {
                println("Saldo insuficiente")
                return false
            }

            else -> {
                this.sacar(valor)
                contaDestino.depositar(valor)
                println("Transferencia realizada")
                return true
            }
        }
    }

}


fun testaCondicoes(saldo: Double) {
    if (saldo > 0.0) {
        println("Saldo positivo")
    } else if (saldo == 0.0) {
        println("Saldo zerado")
    } else {
        println("Saldo negativo")
    }

    when {
        saldo > 0.0 -> println("Saldo positivo")
        saldo == 0.0 -> println("Saldo zerado")
        else -> println("Saldo negativo")
    }
}

fun testaRepeticoes() {
//    for (i in 1..10){
//        println(i)
//    }

//    for (i in 10 downTo 1){
//        println(i)
//    }


//    var i =0
//    while (i <=10){
//        println(i)
//        i++
//    }
}
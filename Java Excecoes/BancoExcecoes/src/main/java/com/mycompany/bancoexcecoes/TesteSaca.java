/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.bancoexcecoes;

/**
 *
 * @author nicks
 */
public class TesteSaca {
    public static void main(String[] args) {
        
        Conta conta = new ContaCorrente(123 ,321);
        
        conta.deposita(200);
        
        try {
            conta.saca(500);
        } catch (Exception ex) {
            System.out.println(ex.getMessage());
        }
        
        System.out.println(conta.getSaldo());
    }
}

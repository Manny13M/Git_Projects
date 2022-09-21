/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Enum.java to edit this template
 */
package finalprojectsoftdes;

/**
 *
 * @author manuelmartinez
 */
public enum Suit 
{
    CLUB("Clubs"),
    DIAMOND("Diamonds"),
    HEART("Hearts"),
    SPADE("Spades");

    String suitName;

    Suit(String suitName) 
    {
        this.suitName = suitName;
    }

    public String toString()
    {
        return suitName;
    }
    
}

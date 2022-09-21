/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package finalprojectsoftdes;

import java.util.ArrayList;
/**
 *
 * @author manuelmartinez
 */

public class Deck 
{
    private ArrayList<Card> deck;

    //First constructor for deck
    public Deck()
    {
        deck = new ArrayList<Card>();
    }
    
    //Second constructor for deck
    public Deck(boolean makeDeck)
    {
        deck = new ArrayList<Card>();
        if(makeDeck)
        {
            //Go through all the suits
            for(Suit suit : Suit.values())
            {
                //Go through all the ranks
                for(Rank rank : Rank.values())
                {
                    //add a new card containing each iterations suit and rank
                    deck.add(new Card(suit, rank));
                }
            }
        }
    }
    
    public void addCard(Card card)
    {
        deck.add(card);
    }
    
    public String toString()
    {
        //A string to hold everything we're going to return
        String output = "";

        //for each Card "card" in the deck
        for(Card card: deck)
        {
            //add the card and the escape character for a new line
            output += card;
            output += "\n";
        }
        return output;
    }
    
    //Shuffle the deck
    public void shuffle()
    {
        ArrayList<Card> shuffled = new ArrayList<Card>();
        
        //iterate through the size of the deck, so each card can be pulled
        while(deck.size()>0)
        {
            //Select a random index to pull
            int cardToPull = (int)(Math.random()*(deck.size()-1));
            
            //Add this random card to the new shuffled deck
            shuffled.add(deck.get(cardToPull));
            
            //Remove the pulled card from the original deck
            deck.remove(cardToPull);
        }
        deck = shuffled;
    }
    
    
    public Card takeCard()
    {

        //Take a copy of the first card from the deck
        Card cardToTake = new Card(deck.get(0));
        
        //Remove the card from the deck
        deck.remove(0);
        
        //Give the card back
        return cardToTake;

    }
    
    public boolean hasCards()
    {
        if (deck.size()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    /**
 * Empties out this Deck
 */
    public void emptyDeck()
    {
        deck.clear();
    }

    /**
     *
     * @param cards an array list of cards to be added to this deck
     */
    
    public void addCards(ArrayList<Card> cards)
    {
        deck.addAll(cards);
    }


    /**
     * Take all the cards from a discarded deck and place them in this deck, shuffled.
     * Clear the old deck
     * @param discard - the deck we're getting the cards from
     */
    
    public void reloadDeckFromDiscard(Deck discard)
    {
        //this.addCards(discard.getCards());
        this.shuffle();
        discard.emptyDeck();
        System.out.println("Ran out of cards, creating new deck from discard pile & shuffling deck.");
    }
    
    public int cardsLeft()
    {
        return deck.size();
    }   
}

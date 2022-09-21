/*
 * SYST17796 - Fundamentals of Software Design and Development
 * Course Project - Deliverable 3
 */
package finalprojectsoftdes;

/**
 * @author ManuelMartinez 
 * @author KaloyanPalazov 
 * @author StephenPaton 
 * @author AhmadAyoub
 */
public class IsValidInput 
{
    
    public static boolean isValidNumber(int number)
    {
        boolean isAValidNumber = false;
        
        if(number == 1 || number == 2)
        {
            isAValidNumber = true;
        }
        
        return isAValidNumber;
    }
}



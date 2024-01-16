<?php

session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    //if for functionality of add to cart button
    if(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            {
                echo "<script>
                alert('Item already added');
                window.location.href='product_detail.php'
                </script>";
            
            }
            else{
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            echo "<script>
            alert('Item added');
            window.location.href='product_detail.php'
            </script>";
            }
        }
        else
        {
            $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            echo "<script>
            alert('Item added');
            window.location.href='product_detail.php'
            </script>";
        }
    }

    //if to remove item
    if(isset($_POST['Remove_Item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {   
            if($value['Item_Name']==$_POST['Item_Name'])
            {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            echo "<script>
                    window.location.href='mycart.php';
            </script>";
            }
        }
    }

    //If to modify quantity
    if (isset($_POST['Mod_Quantity'], $_POST['Item_Name'])) 
    {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['Item_Name'] == $_POST['Item_Name']) {
                $_SESSION['cart'][$key]['Quantity'] = $_POST['Mod_Quantity'];
                echo "<script>
                        window.location.href='mycart.php';
                      </script>";
            }
        }
    }
 
}

if(isset($_POST['View_Product']))
{
            echo "<script>
            window.location.href='product_detail.php'
            </script>";
       
}

?>

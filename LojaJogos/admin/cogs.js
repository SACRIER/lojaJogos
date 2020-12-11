<script language="javascript">
            function textos(e,args)
            {		
                if (document.all){
                    var evt=event.keyCode;
                }
                else{
                    var evt = e.charCode;
                }
                var valid_chars = 'abcdefghijlmnopqrstuvxzwykABCDEFGHIJLMNOPQRSTUVXZWYKàáãâéèêíìóôõúÀÁÃÂÈÉÊÍÌÕÔÓÚ '+args;
                var chr= String.fromCharCode(evt);
                if (valid_chars.indexOf(chr)>-1){
                    return true;
                }
                return false;
            }
</script>


<script language="javascript">
            function textosespeciais(e,args)
            {       
                if (document.all){var evt=event.keyCode;}
                else{var evt = e.charCode;}
                var valid_chars = '0123456789abcdefghijlmnopqrstuvxzwykABCDEFGHIJLMNOPQRSTUVXZWYKàáãâéèêíìóôõúÀÁÃÂÈÉÊÍÌÕÔÓÚ,@/:.!?-_ '+args;
                var chr= String.fromCharCode(evt);
                if (valid_chars.indexOf(chr)>-1){return true;}
                return false;
            }
</script>

<script language="javascript">
            function numericos(e,args)
            {       
                if (document.all){var evt=event.keyCode;}
                else{var evt = e.charCode;}
                var valid_chars = '0123456789'+args;
                var chr= String.fromCharCode(evt);
                if (valid_chars.indexOf(chr)>-1){return true;}
                return false;
            }
 </script>
 

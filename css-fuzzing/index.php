<!doctype HTML>
<html>
<head>
<meta charset="UTF-8" />
<style>
iframe {
   width: 100%;
   height: 2000px;
   border: none;
}

input, select, .placeholders {
  float:left;
  box-sizing: border-box;
  height: 20px;
}

select {
  width: 10%;
}

.placeholders {
  width: 30%;
  text-align: center;
}

.placeholder {
    background-color: #FFF5BF;
    border: 1px solid #FF9900;
    padding: 5px;
    margin: 2px;
}

input {
  width: 60%;
}
</style>
<script>
function fuzz() {
  let vector = document.getElementById('vector').value;
  let fuzz = document.getElementById('fuzz');
  fuzz.contentWindow.location = 'fuzz.php?vector='+encodeURIComponent(vector);
}
function insertPlaceholder(placeholder) {
    let input = document.getElementById('vector');
    let data = input.value;
    let start = data.substr(0, input.selectionStart);
		let end = data.substr(input.selectionEnd, data.length);
    input.value = start + placeholder + end;
}
onload = function() {
  let fuzz = document.getElementById('fuzz');
  const url = new URL(window.location);
  let searchParams = url.searchParams;
  if(Array.from(searchParams).length) {
    fuzz.contentWindow.location = 'fuzz.php?'+searchParams;
  }
};
</script>
</head>
<body>
   <form onsubmit="fuzz();return false;">
     <select onchange="this.form.vector.value=this.value">
       <option selected="selected" value="\$hex2 background:url(red.png);}">hex escape before property name</option>
       <option selected="selected" value="\$hex2 ackground:url(red.png);}">hex escape instead of b in property name</option>
       <option selected="selected" value="$chrbackground:url(red.png);}">before property name</option>
       <option selected="selected" value="b$chrackground:url(red.png);}">inside property name</option>
       <option selected="selected" value="background$chrurl(red.png);}">instead of colon</option>
       <option selected="selected" value="background:$chrurl(red.png);}">before url</option>
       <option selected="selected" value="background:ur$chrl(red.png);}">in url</option>
       <option selected="selected" value="background:url$chr(red.png);}">after url</option>
       <option value="font-family:'abc$chr;background:url(red.png)">CSS single quoted strings</option>
       <option value="font-family:&quot;abc$chr;background:url(red.png)">CSS double quoted strings</option>
     </select>
     <div class="placeholders">
        <span class="placeholder" title="The actual character being fuzzed" onclick="insertPlaceholder(this.textContent)">$chr</span>
        <span class="placeholder" title="The hex of character code being fuzzed zero padded 2 zeros" onclick="insertPlaceholder(this.textContent)">$hex2</span>
        <span class="placeholder" title="The hex of character code being fuzzed zero padded 4 zeros" onclick="insertPlaceholder(this.textContent)">$hex4</span>
        <span class="placeholder" title="The hex of character code being fuzzed zero padded 6 zeros"onclick="insertPlaceholder(this.textContent)">$hex6</span>
        <span class="placeholder" title="The character code in decimal" onclick="insertPlaceholder(this.textContent)">$num</span>
     </div>
     <input id="vector" value="background:url$chr(red.png);}" />
   </form> 
   <iframe id="fuzz"></iframe>
</body>
</html>

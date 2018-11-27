module.exports=function(nbsecu) {
	var nb = parseInt(nbsecu/100);
	var clef = 97-(nb%97);
	if (clef == nbsecu%100){
		return true;
	} else {
		return false;
	}
  return false;
}
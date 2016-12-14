
	function setStage(){

		var sites = [
			{x:'-430px',y:0,'zIndex':1},
			{x:'-59%',y:'-30%','zIndex':0},
			{x:'114%',y:'-30%','zIndex':0},
			{x:'200%',y:'2%','zIndex':1},
			{x:'28%',y:0,'zIndex':2}
		];

		var cardsBox = document.querySelectorAll('.cards');

		function move(cardsBox){

			for (var i = 0; i < cardsBox.length; i++) {

				cardsBox[i].style.transform = 'translate('+sites[i].x+','+sites[i].y+')';
				cardsBox[i].style.webkitTransform = 'translate('+sites[i].x+','+sites[i].y+')';
				cardsBox[i].style.zIndex = sites[i].zIndex;

			}
		}

		var temp = Array.prototype.slice.call(cardsBox);
		    move(temp);
		var activeInd = 4;

		function clickEvent(e){

				e.preventDefault();
				e.stopPropagation();
				for (var i = 0; i < temp.length; i++) {
					if(temp[i] == e.target){

						if(i == activeInd){

							return;

						}

						if(i <2){

							if(i == 1){
								rollRight(2);
							}
							if(i == 0){
								rollRight(1);
							}


						}

						if(i>=2){
							if(i == 2){

								rollLeft(i);

							}
							if(i == 3){
								rollLeft(1)

							}
						}
					}
				}
		}

		function rollLeft(len){
			var ind = 0;
			var speed = 600;
			var inter = setInterval(function(){
						   if(ind>=len-1){
						   	  clearInterval(inter);
						   }
						   ind++;
						   speed = ind*500;
						   var tem = temp.pop();
						       temp.unshift(tem);
				               move(temp);
			            },500*(len-2))
		}

		function rollRight(len){
			var ind = 0;
			var inter = setInterval(function(){
						   if(ind>=len-1){
						   	  clearInterval(inter);
						   }
						   ind++;
						   var tem = temp.shift();
						       temp.push(tem);
				               move(temp);
			            },500*(len-2))
		}

		function bindEvent(temp){

			for (var i = 0; i < temp.length; i++) {
				temp[i].removeEventListener('click',clickEvent);
				temp[i].addEventListener('click',clickEvent);
			}
		}

		bindEvent(temp);
	}
	setStage();

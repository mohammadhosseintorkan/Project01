// افزودن تابع 'شامل بودن' به کلاس آرایه
Array.prototype.contains = function ( item ) {
   for (i in this) {
       if (this[i] == item) return true;
   }
   return false;
}

class Validation{
    #privateProperty
	constructor(parameter) {
     this.publicProperty = parameter;
     this.#privateProperty = parameter;
     }
    //static property = 'value';

    static number(){
        if( this.validity.rangeUnderflow ) {
            var error = 'عدد باید بزرگتر یا مساوی ' + this.min + ' باشد!';
            this.setCustomValidity( error );
            this.reportValidity();
        }
        else if( this.validity.rangeOverflow ) {
            var error = 'عدد باید کوچکتر یا مساوی ' + this.max + ' باشد!';
            this.setCustomValidity( error );
            this.reportValidity();
        }
        else if( this.validity.stepMismatch ) {
            var numFloor = Math.floor(this.value / this.step) * this.step;
            var numCeil = numFloor + Math.floor(this.step);
            var error = 'عدد نا معتبر! نزدیک ترین عدد ' + numFloor + ' و ' + numCeil + ' است!';
            this.setCustomValidity( error );
            this.reportValidity();
        }
        else {
            this.setCustomValidity('');
            this.reportValidity();
        }
    }


	static required(){
        var errorTag = this.parentNode.querySelector( '.text-danger' );
        if ( errorTag ) {
            if (this.validity.valueMissing) {
                var error = 'این فیلد ضروری است!';
                this.setCustomValidity( error );
                this.reportValidity();
                errorTag.innerHTML = error;
            } else {
                this.setCustomValidity( '' );
                this.reportValidity();
                errorTag.innerHTML = '';
            }
        }
	}
}
//Validation.required();
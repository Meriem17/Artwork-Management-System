import { Component } from '@angular/core';

@Component({
  selector: 'app-oeuvremanagement',
  templateUrl: './oeuvremanagement.component.html',
  styleUrls: ['./oeuvremanagement.component.css']
})
export class OeuvremanagementComponent {
  hideSelection : boolean = true;
  modalVisibility : boolean = true;
  modalVisibility1 : boolean = true;
  constructor() { }
  handleEventClick(event: any){

    this.modalVisibility = false;
  }
  handleEventClick1(event: any){

    this.modalVisibility1 = false;
  }

}

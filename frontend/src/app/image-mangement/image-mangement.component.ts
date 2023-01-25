import { Component, OnInit } from '@angular/core';
import { FormBuilder, Validators, FormArray, FormGroup,  FormControl } from '@angular/forms';
import { ImageService } from '../services/image.service';
@Component({
  selector: 'app-image-mangement',
  templateUrl: './image-mangement.component.html',
  styleUrls: ['./image-mangement.component.css']
})
export class ImageMangementComponent implements OnInit {

  constructor(private fb: FormBuilder,
    private _formBuilder: FormBuilder,
    private imageService: ImageService) { }
    createForm = this.fb.group({
        copyright:null,
        droitsPhotographiques:null,
        imagePath:null,
        ouvrage_id:null

    })
    file: File = null as any ;
  ngOnInit(): void {
  }

  onFileChange(event:any) {

    if (event.target.files.length > 0) {
      this.file = event.target.files[0];
    
      
      
    }
  }
  onSubmit(){
    this.imageService.UploadFile(this.file, this.createForm.value).subscribe(
      response => console.log('Success !', response),
      error => console.error('Error !', error)
       );
  }
}

import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { NavAdminComponent } from './nav-admin/nav-admin.component';
import { ArtisteMangementComponent } from './artiste-mangement/artiste-mangement.component';
const routes: Routes = [
  {
    path: '',
    component: NavAdminComponent,
    children: [
      {
        path: 'artisteMangement',
        component: ArtisteMangementComponent,
    
      },
    ]

  },
 

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})


export class AppRoutingModule { }

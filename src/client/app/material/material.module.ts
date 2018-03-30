import { NgModule } from '@angular/core';
import {
	MatButtonModule,
	MatCheckboxModule,
	MatToolbarModule,
	MatSidenavModule,
	MatCardModule
} from '@angular/material';


@NgModule({
	imports: [
		MatButtonModule,
		MatCheckboxModule,
		MatToolbarModule,
		MatSidenavModule,
		MatCardModule
	],
	exports: [
		MatButtonModule,
		MatCheckboxModule,
		MatToolbarModule,
		MatSidenavModule,
		MatCardModule
	]
})
export class MaterialModule { }

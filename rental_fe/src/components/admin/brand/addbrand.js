import React , {useState } from 'react';
import { connect } from "react-redux"
import {addBrand} from "../../../redux/action/admin/brand/action";
import { withRouter } from "react-router";


const AddBrand = (props) => {

    const [brandName,setBrandName] = useState("");

    function submit(){
       props.savebrand(brandName);
    }

    function changeName(e) {
        setBrandName(e.target.value)
    }

    return (  
            <div>
            <h3>Create Brand</h3>
             <hr />
            <div >
            <div className="form-group">
                <label for="exampleInputEmail1">Brand Name</label>
                <input type="text" className="form-control" placeholder="Enter brand name" onChange={changeName} />
            </div>
            <button type="submit" onClick={submit} className="btn btn-primary">Submit</button>
            </div>
            </div>
    );
            
    
};

const mapDispatchToProps  = (dispatch,ownProps) => {

    return {
        savebrand : (brandname) => dispatch(addBrand(brandname,ownProps))
    }
}


export default withRouter(connect(null,mapDispatchToProps)(AddBrand));
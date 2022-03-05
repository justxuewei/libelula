import React from "react";

const Picture = (props) => {
    return (
        <div>
            <img src={props.src}  alt={""}/>
            {props.children}
        </div>
    )
}

export default Picture;

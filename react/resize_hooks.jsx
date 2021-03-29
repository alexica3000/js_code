const LayoutComponent = () => {
    const [onSmallScreen, setOnSmallScreen] = useState(false);

    useEffect(() => {
        checkScreenSize();
        window.addEventListener("resize", checkScreenSize);
    }, []);

    let checkScreenSize = () => {
        setOnSmallScreen(window.innerWidth < 768);
    };

    return (
        <div className={`${onSmallScreen ? "small" : "large"}`}>
            <h1>Hello World!</h1>
        </div>
    );
};

// other component

import { useState, useEffect } from "react";

const useSize = () => {
    const [isScreenSmall, setIsScreenSmall] = useState(false);

    let checkScreenSize = () => {
        setIsScreenSmall(window.innerWidth < 600);
    };
    useEffect(() => {
        checkScreenSize();
        window.addEventListener("resize", checkScreenSize);

        return () => window.removeEventListener("resize", checkScreenSize);
    }, []);

    return isScreenSmall;
};

export default useSize;

// use

import React from 'react'
import useSize from './useSize.js'

const LayoutComponent = () => {
    const onSmallScreen = useSize();

    return (
        <div className={`${onSmallScreen ? "small" : "large"}`}>
            <h1>Hello World!</h1>
        </div>
    );
}


